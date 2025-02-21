# TYPO3 Custom Content Elements and Machines Plugin

This repository contains two TYPO3 packages:

1. **Custom Content Elements**: A collection of styled content elements for TYPO3.
2. **Machines Plugin**: A TYPO3 plugin for managing and displaying machines.

---

## 1. Custom Content Elements

This package provides a variety of custom content elements for TYPO3, designed to enhance the flexibility and styling options for your website. These elements are located in the `tca_override` directory.


### Usage

To use these custom content elements, include the `tca_override` directory in your TYPO3 extension. The elements will be available in the TYPO3 backend for content editors to use.

---

## 2. Machines Plugin

This package provides a TYPO3 plugin for managing and displaying machines. It includes controllers for listing machines and categories, as well as a wizard for easy integration into TYPO3 pages.


- **Controllers**:
  - `MachinesController`: Handles listing and displaying machines.
  - `CategoryController`: Handles listing categories.

- **Wizard Configuration**:
  - Adds a new content element wizard for the Machines plugin.
  - Provides an icon, title, and description for the plugin.

### Usage

1. Install the plugin in your TYPO3 instance.
2. Use the content element wizard to add the Machines plugin to a page.
3. Configure the plugin to display machines and categories as needed.

---

## Installation

1. Clone this repository into your TYPO3 `extensions` directory.
2. Install the packages via the TYPO3 Extension Manager or Composer.
3. Clear the TYPO3 cache and reload the backend.



---

For questions or support, please open an issue in this repository.
