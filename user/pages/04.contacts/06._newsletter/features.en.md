---
title: Newsletter
cache_enable: false
template: modular/contacts/form-newsletter
description: Subscribe for updates on psychology topics and events!
form:
  name: newsletter_form
  action: /contacts
  fields:
    email:
      label: Email
      placeholder: Enter your email
      type: email
      validate:
        required: true

  buttons:
    submit:
      type: submit
      value: Subscribe

  process:
    email:
      - from: "{{ config.plugins.email.from }}"
        reply_to: "{{ form.value.email }}"
        to: "{{ config.plugins.email.to }}"
        subject: "Newsletter subscription request from {{ form.value.email|e }}"
        body: |
          Hi Emmanouela,
          There is a new subscription request for your newsletter.

          **Email:** {{ form.value.email|e }}
    message: "Thank you for subscribing to my newsletter!"
    reset: true
---
