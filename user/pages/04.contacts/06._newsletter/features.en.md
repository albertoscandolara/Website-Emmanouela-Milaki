---
title: Newsletter
content:
  items: "@self.modular"
template: partials/components/form-newsletter
process:
  twig: true
  markdown: false
description: Subscribe for updates on psychology topics and events!
form:
  name: newsletter-form
  fields:
    - name: email
      label: Email
      type: email
      placeholder: Enter your email
      validate:
        required: true

  buttons:
    - type: submit
      value: Subscribe

  process:
    - email:
        from: "{{ form.value.email }}"
        to: "recipient@example.com"
        subject: "Newsletter subscription request from {{ form.value.email }}"
        body: |
          Hi Emmanouela, there is a new subscription request for your newsletter.
          Email: {{ form.value.email }}
    - message: "Thank you for subscribing to our newsletter!"
    - reset: true
---
