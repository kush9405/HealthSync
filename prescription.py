from flask import Flask, render_template, request, redirect, url_for
import os
import spacy

app = Flask(__name__)

# Initialize SpaCy model for NLP tasks
nlp = spacy.load("en_core_web_sm")

# Function to extract main medical keywords from prescription text
def extract_keywords(text):
    doc = nlp(text)
    keywords = [token.text for token in doc if token.pos_ == "NOUN" and token.is_alpha]
    return keywords

# Function to generate a summary based on keywords
def generate_summary(text, keywords):
    # Your summarization logic here
    # This could be a simple extraction of sentences containing the keywords
    # or more advanced methods like TextRank
    summary = "This is a summary of the prescription based on the keywords."
    return summary

# Endpoint to upload prescription
@app.route("/upload_prescription", methods=["GET", "POST"])
def upload_prescription():
    if request.method == "POST":
        if "file" not in request.files:
            return "No file part"
        
        file = request.files["file"]
        
        if file.filename == "":
            return "No selected file"
        
        if file:
            filename = file.filename
            file.save(os.path.join("uploads", filename))
            
            # Extract keywords
            text = file.read().decode("utf-8")  # Read the file content
            keywords = extract_keywords(text)
            
            # Print keywords on terminal
            print("Keywords extracted from the prescription:", keywords)

            # Save keywords to a new file
            with open(os.path.join("uploads", "p1_sum.txt"), "w") as f:
                f.write("Keywords extracted from the prescription:\n")
                f.write("\n".join(keywords))

            # Generate summary
            summary = generate_summary(text, keywords)

            return "Prescription uploaded successfully. Summary: " + summary

    return render_template("upload.html")

# Serve the HTML template for uploading prescriptions
@app.route("/templates/")
def index():
    return render_template("upload.html")

if __name__ == "__main__":
    app.run(debug=True)