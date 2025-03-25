---
title: Contact us
description: Feel free to reach out! We’ll get back to you shortly.
content:
  items: "@self.modular"
template: partials/components/form-contact-us
process:
  twig: true
  markdown: false
form:
  name: contact-form
  fields:
    - name: name
      label: Name
      type: text
      placeholder: Enter your name
      validate:
        required: true

    - name: surname
      label: Surname
      type: text
      placeholder: Enter your surname
      validate:
        required: true

    - name: email
      label: Email
      type: email
      placeholder: Enter your email
      validate:
        required: true

    - name: message
      label: Message
      type: textarea
      placeholder: Enter your message
      validate:
        required: true
        min: 10

  buttons:
    - type: submit
      value: Send

  process:
    - email:
        from: "{{ form.value.email }}"
        to: "recipient@example.com"
        subject: "New Message from {{ form.value.name }} {{ form.value.surname }}"
        body: |
          You have received a new message from the contact form:

          **Name:** {{ form.value.name }}
          **Surname:** {{ form.value.surname }}
          **Email:** {{ form.value.email }}
          **Message:**
          {{ form.value.message }}

    - message: "Thank you! Your message has been sent."
    - reset: true
---
