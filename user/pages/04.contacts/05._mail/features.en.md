---
title: Contact us
cache_enable: false
description: Feel free to reach out! We’ll get back to you shortly.
template: modular/contacts/form-contact-us
process:
  twig: true
  markdown: false

form:
  action: /contacts
  name: contact_form

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
      placeholder: Enter your email test
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
    email:
      from: "{{ config.plugins.email.from }}"
      reply_to: "{{ form.value.email }}"
      to: "alberto.scandolara92@gmail.com"
      subject: "mESSAGGIO DI TEST"
      body: |
        Hi Emmanouela
      process_markdown: true

    message: "Thank you for getting in touch!"
    reset: false
---
