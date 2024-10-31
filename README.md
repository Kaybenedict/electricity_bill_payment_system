Documentation

```markdown
# Electricity Bill Payment System

## Description
A backend service for electricity bill vending and payments using an event-driven architecture.

## Technologies
 PHP
 AWS SNS/SQS (mocked for local development)

## Setup Instructions
 Clone the repository.
 Run the application locally using a PHP server using XAMPP.

## API Endpoints
 `POST /electricity/verify`: Create a new electricity bill.
 `POST /vend/:validationRef/pay`: Pay a bill.
 `POST /wallets/:id/add-funds`: Add funds to a wallet.

## Event Handling
Events are published when bills are created, payments are made, or funds are added.

## Mock SMS Notification
SMS notifications are logged in the console.
```
