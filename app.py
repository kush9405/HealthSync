from flask import Flask, render_template, request
import subprocess

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/run_python_script', methods=['POST'])
def run_python_script():
    # Run your Python script here
    result = subprocess.run(['python', 'prescription.py'], capture_output=True, text=True)
    return result.stdout

if __name__ == '__main__':
    app.run(debug=False)
