# Factory Method Pattern – PHP Native Example

This repository demonstrates a **clean and correct implementation of the Factory Method Design Pattern** using **pure PHP (native PHP)** without any frameworks.

The example is intentionally simple and educational, focusing on _design thinking_ rather than tooling.

---

## What Problem Does This Solve?

When building a system that creates objects of different types (Email, SMS, Push notifications), directly instantiating classes using `new` causes:

- Tight coupling between client code and concrete classes
- Difficulty extending the system
- Violation of the Open/Closed Principle

The **Factory Method Pattern** solves this by:

- Delegating object creation to subclasses
- Allowing the client to work with abstractions only
- Making the system extensible without modifying existing logic

---

## Pattern Overview

The pattern consists of four main parts:

1. **Product Interface**  
   Defines the common behavior for all products.

2. **Concrete Products**  
   Different implementations of the product interface.

3. **Creator (Abstract Class)**  
   Declares the factory method and contains shared business logic.

4. **Concrete Creators**  
   Subclasses that decide which concrete product to instantiate.

---
