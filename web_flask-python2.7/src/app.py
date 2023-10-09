from flask import Flask
app = Flask(__name__)

@app.route("/")
def flag():
    with open("/flag", "r") as f:
        return f.read()