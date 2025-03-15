---
title: Newsletter
content:
  items: "@self.modular"
form:
  name: newsletter-form
  fields:
    - name: email
      label: Email
      placeholder: "Enter your email"
      type: email
      validate:
        required: true
  buttons:
    - type: submit
      value: Subscribe
  process:
    - email:
        from: "{{ config.plugins.email.from }}"
        to: xyz@example.com
        subject: "[Newsletter Subscription]"
        body: "{% include 'forms/data.html.twig' %}"
    - message: "Thank you for subscribing to our newsletter!"
---
