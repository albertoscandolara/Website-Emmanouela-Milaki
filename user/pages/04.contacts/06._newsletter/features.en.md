---
title: Newsletter
cache_enable: false
content:
  items: "@self.modular"
template: partials/components/form-newsletter
process:
  twig: true
  markdown: false
description: Subscribe for updates on psychology topics and events!
form:
  action: /contacts
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
        from: "{{ config.plugins.email.from }}"
        to: "{{ config.plugins.email.to }}"
        subject: "Newsletter subscription request from {{ form.value.email|e }}"
        body: |
          Hi Emmanouela,
          There is a new subscription request for your newsletter.

          **Email:** {{ form.value.email|e }}
    - message: "Thank you for subscribing to my newsletter!"
    - reset: true
---
