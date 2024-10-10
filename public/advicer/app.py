from flask import Flask, request, render_template

import spacy

app = Flask(__name__)

# Load English language model
nlp = spacy.load('en_core_web_sm')

# Your data dictionary
data = {
    'courses': {
        'Computer Science': ['BSc', 'MSc', 'PhD'],
        'Physics': ['BSc', 'MSc', 'PhD']
    },
    'admissions': 'Admissions are currently open. Please visit our website for more details.',
    'academic_calendar': 'The academic calendar can be found on our website.',
    # Add more data as needed
}

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/flask', methods=['POST'])
def ask():
    question = request.form['question']
    answer = get_answer(question)
    return render_template('flask.blade.php', question=question, answer=answer)

def get_answer(question):
    # Process the question using spaCy
    doc = nlp(question)
    # Example logic for finding keywords
    if any(token.text.lower() == 'course' for token in doc):
        return 'We offer courses in Computer Science and Physics.'
    elif any(token.text.lower() == 'admission' for token in doc):
        return data['admissions']
    elif any(token.text.lower() == 'academic' and token.nbor(1).text.lower() == 'calendar' for token in doc):
        return data['academic_calendar']
    else:
        return 'Sorry, I do not understand your question.'

if __name__ == '__main__':
    app.run(debug=True)
