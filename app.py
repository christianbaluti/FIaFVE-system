from flask import Flask, request, jsonify
import vonage
from os import environ

app = Flask(__name__)

# Initialize the Vonage client
client = vonage.Client(key='d5842826', secret='Mn7SsYYDo8mEaQ7n')
sms = vonage.Sms(client)

# Simple state management
user_state = {}

@app.route("/webhooks/inbound-sms", methods=['POST'])
def inbound_sms():
    data = request.get_json()
    from_number = data['msisdn']
    text = data['text'].strip().lower()

    # Check the user's state and respond appropriately
    if from_number not in user_state:
        # Send the initial message
        response = sms.send_message({
            'from': '+265888471389',
            'to': from_number,
            'text': 'Hello! Do you like Python programming? (Yes/No)'
        })
        user_state[from_number] = 'awaiting_reply'
        return jsonify(response)
    else:
        # Respond based on the user's reply
        if 'yes' in text:
            reply_text = "Awesome! Python is great for web development, data analysis, and more!"
        elif 'no' in text:
            reply_text = "That's okay! What's your favorite programming language?"
        else:
            reply_text = "Sorry, I didn't understand that. Please reply with 'Yes' or 'No'."
        
        response = sms.send_message({
            'from': '+265888471389',
            'to': from_number,
            'text': reply_text
        })
        return jsonify(response)

if __name__ == '__main__':
    app.run(port=5000)
