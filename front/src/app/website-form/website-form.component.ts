import { Component, OnInit } from '@angular/core';
import {Website} from '../model/website';
import {WebsitesService} from '../../providers/websites.service';
import {FormBuilder, FormGroup} from '@angular/forms';
import {AlertService} from '../../providers/alert.service';

@Component({
  selector: 'app-website-form',
  templateUrl: './website-form.component.html',
  styleUrls: ['./website-form.component.css']
})
export class WebsiteFormComponent implements OnInit {
  websiteForm: FormGroup;
  model: any = {};

  constructor(private formBuilder: FormBuilder, private websiteService: WebsitesService, private alertService: AlertService) { }

  ngOnInit() {
  }

  add() {
    this.websiteService.addWebsite(this.model)
      .subscribe(
        data => {
          console.log(data);
        }
      );
  }

}
