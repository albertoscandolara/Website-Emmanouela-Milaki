---
title: Contact us
cache_enable: false
description: Feel free to reach out! We’ll get back to you shortly.
template: partials/components/form-contact-us
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
    email:
      - from: "{{ config.plugins.email.from }}"
        to: "{{ config.plugins.email.to }}"
        subject: "New Message from {{ form.value.name|e }} {{ form.value.surname|e }}"
        body: |
          Hi Emmanouela,
          You have received a new message.

          **Name:** {{ form.value.name|e }}
          **Surname:** {{ form.value.surname|e }}
          **Email:** {{ form.value.email|e }}
          **Message:**
          {{ form.value.message }}

    message: "Thank you for getting in touch!"
    reset: true
---
