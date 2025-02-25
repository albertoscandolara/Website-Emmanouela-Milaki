---
title: Suggestions
content:
  items: "@self.modular"
form:
  name: suggestions-form
  fields:
    - name: name
      label: Name
      placeholder: "Enter your name"
      type: text
      validate:
        required: true
    - name: email
      label: Email
      placeholder: "Enter your email"
      type: email
      validate:
        required: true
    - name: message
      label: Suggestion
      placeholder: "Enter your suggestion"
      type: textarea
      validate:
        required: true
  buttons:
    - type: submit
      value: Send
  process:
    - email:
        from: "{{ form.value.email }}"
        to: abc@example.com
        subject: "[Suggestions] {{ form.value.name }}"
        body: "{% include 'forms/data.html.twig' %}"
    - message: "Thank you for your suggestion!"
---
