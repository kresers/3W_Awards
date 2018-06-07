import { Component, Input, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import {Contact} from '../model/contact';
import {ContactService} from '../../providers/contact.service';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent {
    contact: Contact;
    contactForm: FormGroup;

  constructor(private fb: FormBuilder, public contactService: ContactService) {
    this.createForm();
  }

  createForm() {
    this.contactForm = this.fb.group({
        name: ['', Validators.required ],
        email: ['', Validators.required ],
        message: ['', Validators.required ],
    });
  }
    prepareSaveContact(): Contact {
        const formModel = this.contactForm.value;
        const saveContact: Contact = {
            name: formModel.name as string,
            email: formModel.email as string,
            message: formModel.message as string,
        };
        console.log(saveContact);
        return saveContact;
    }
    onSubmit() {
        this.contact = this.prepareSaveContact();
        this.contactService.addContact(this.contact).subscribe();
    }



}
