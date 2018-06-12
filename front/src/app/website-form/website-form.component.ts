import {Component, Input, OnInit} from '@angular/core';
import {Website} from '../model/website';
import {WebsitesService} from '../../providers/websites.service';
import {FormBuilder, FormControl, FormGroup, Validators, FormArray} from '@angular/forms';
import {AlertService} from '../../providers/alert.service';
import {Color} from '../model/color';
import {Technology} from '../model/technology';
import {Award} from '../model/award';
import {Country} from '../model/country';
import {isBoolean} from 'util';
import {TechnologyService} from '../../providers/technology.service';
import {ColorService} from '../../providers/color.service';
import {CountryService} from '../../providers/country.service';

@Component({
  selector: 'app-website-form',
  templateUrl: './website-form.component.html',
  styleUrls: ['./website-form.component.css']
})


export class WebsiteFormComponent implements OnInit {
  @Input() website: Website;
   color: any ;
   technology: Technology[];
   country: Country[];

  model: any = {};
  websiteForm: FormGroup;

  constructor(
      private formBuilder: FormBuilder,
      private websiteService: WebsitesService,
      private technologyService: TechnologyService,
      private colorService: ColorService,
      private countryService: CountryService,
      private alertService: AlertService) {
    this.createForm();
  }

  ngOnInit() {
      this.getColor();
      this.getTechnology();
      this.getCountries();
  }
  getColor() {
      this.colorService.getColors()
          .subscribe((data) => {
              console.log(data);
              this.color = data;
          });
  }
  getTechnology() {
      this.technologyService.getTechnologies()
          .subscribe(data => {
              console.log(data);
              this.technology = data;
          });
  }

  getCountries() {
      this.countryService.getCountries()
          .subscribe(data => {
              console.log(data);
              this.country = data;
          });
  }
  get award(): FormArray {
    return this.websiteForm.get('award') as FormArray;
  }

  createForm() {
    this.websiteForm = this.formBuilder.group({
      project_name: ['', Validators.required ],
      project_description: ['', Validators.required ],
      image: ['', Validators.required ],
      screenshot: ['', Validators.required ],
      second: ['', Validators.required ],
      keywords: ['', Validators.required ],
      website_type: ['', Validators.required ],
      activity_area: ['', Validators.required ],
      target: ['', Validators.required ],
      project_focus: ['', Validators.required ],
      project_budget: ['', Validators.required ],
      languages: ['', Validators.required ],
      created_by: ['', Validators.required ],
      client_name: ['', Validators.required ],
      release_date: ['', Validators.required ],
      giving_to_agency: ['', Validators.required ],
      keyFunctionnality: ['', Validators.required ],
      tech_front: ['', Validators.required ],
      dev_languages: ['', Validators.required ],
      framework: ['', Validators.required ],
      cms: ['', Validators.required ],
      technical_challenges: ['', Validators.required ],
      focal_points: ['', Validators.required ],
      view_number: ['', Validators.required ],
      like_number: ['', Validators.required ],
      average_grade: ['', Validators.required ],
      average_jury_grade: ['', Validators.required ],
      color: this.formBuilder.group(new Color()),
      technology: this.formBuilder.group(new Technology()),
      award: this.formBuilder.group(new Award()),
      country: this.formBuilder.group(new Country()),
      isNominated: ['', Validators.required ],
    });
  }

  prepareSaveWebsite(): Website {
    const formModel = this.websiteForm.value;

      const colorDeepCopy: Color = formModel.color.map(
      (color: Color) => Object.assign({}, color)
    );
      const technologyDeepCopy: Technology = formModel.technology.map(
      (technology: Technology) => Object.assign({}, technology)
    );
      const awardDeepCopy: Award = formModel.award.map(
      (award: Award) => Object.assign({}, award)
    );
      const coutryDeepCopy: Country = formModel.country.map(
        (country: Country) => Object.assign({}, country)
    );

    const saveWebsite: Website = {
      id: this.website.id,
      project_name: formModel.project_name as string,
      project_description: formModel.project_description as string,
      keywords: formModel.keywords as string,
      image: formModel.image as string,
      screenshot: formModel.screenshot as string,
      second: formModel.second as string,
      website_type: formModel.website_type as string,
      activity_area: formModel.activity_area as string,
      target: formModel.target as string,
      project_focus: formModel.project_focus as string,
      project_budget: formModel.project_budget as number,
      languages: formModel.languages as string,
      created_by: formModel.created_by as string,
      client_name: formModel.client_name as string,
      release_date: formModel.release_date as string,
      giving_to_agency: formModel.giving_to_agency as string,
      keyFunctionnality: formModel.keyFunctionnality as string,
      tech_front: formModel.tech_front as string,
      dev_languages: formModel.dev_languages as string,
      framework: formModel.framework as string,
      cms: formModel.cms as string,
      technical_challenges: formModel.technical_challenges as string,
      focal_points: formModel.focal_points as string,
      view_number: formModel.view_number as number,
      like_number: formModel.like_number as number,
      average_grade: formModel.average_grade as string,
      average_jury_grade: formModel.average_jury_grade as string,
      color: colorDeepCopy,
      technology: technologyDeepCopy,
      award: awardDeepCopy,
      country: coutryDeepCopy,
      is_nominated: formModel.is_nominated
    };
    return saveWebsite;
  }

  onSubmit() {
    this.website = this.prepareSaveWebsite();
    this.websiteService.addWebsite(this.website).subscribe();
  }


}
