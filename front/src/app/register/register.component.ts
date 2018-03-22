import { Component, OnInit } from '@angular/core';
import {FormBuilder, FormGroup, Validators} from "@angular/forms";

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
  registerForm: FormGroup;
  constructor(private formBuilder: FormBuilder) {
      this.registerForm = formBuilder.group({
          'prenom': ['', Validators.required],
          'nomPseudo': ['', Validators.required],
          'email': ['', Validators.required],
          'mdp': ['', Validators.required],
      });
  }

  ngOnInit() {
  }
}