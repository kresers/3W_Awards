import {Component, OnInit} from '@angular/core';
import {Website} from '../model/website';
import {Color} from '../model/color';
import {Technology} from '../model/technology';
import {Award} from '../model/award';
import {Country} from '../model/country';
import {LoaderService} from '../../providers/loader.service';
import {LoadDataForSelectService} from '../../providers/loadDataForSelect.service';
import {WebsitesService} from '../../providers/websites.service';

@Component({
  selector: 'app-website-form',
  templateUrl: './website-form.component.html',
  styleUrls: ['./website-form.component.css']
})


export class WebsiteFormComponent implements OnInit {

    website: any;
    project_name: string;
    project_description: string;
    keywords: string;
    image: string;
    screenshot: string;
    second: string;
    website_type: string;
    activity_area: string;
    target: string;
    project_focus: string;
    project_budget: any;
    languages: string;
    created_by: string;
    client_name: any;
    release_date: string;
    giving_to_agency: string;
    keyFunctionnality: string;
    tech_front: string;
    dev_languages: string;
    framework: string;
    cms: string;
    technical_challenges: string;
    focal_points: string;
    view_number: any;
    like_number: any;
    average_grade: string;
    average_jury_grade: string;
    color: Color;
    technology: Technology;
    award: Award;
    country: Country;
    is_nominated: any;

    dropdownListColor = [];
    dropdownListTechno = [];
    selectedItemsColor = [];
    selectedItemsTechno = [];

    dropdownSettingsColor = {};
    dropdownSettingsTechno = {};

    colors: any;
    countries: any;
    technologies: any;


    constructor(
        private loaderService: LoaderService,
        private loadDataForSelectService: LoadDataForSelectService,
        private  websiteService: WebsitesService,
    ) {
        this.dropdownSettingsColor = {
            singleSelection: false,
            text: 'Select Couleur',
            selectAllText: 'Tous selectionner',
            unSelectAllText: 'Tous déselectionnez',
            enableSearchFilter: true,
            classes: ''
        };
        this.dropdownSettingsTechno = {
            singleSelection: false,
            text: 'Select Technology',
            selectAllText: 'Tous selectionner',
            unSelectAllText: 'Tous déselectionnez',
            enableSearchFilter: true,
            classes: ''
        };

    }

    onItemSelectColor(item: any) {
        console.log(item);
        console.log(this.selectedItemsColor);
    }
    OnItemDeSelectColor(item: any) {
        console.log(item);
        console.log(this.selectedItemsColor);
    }
    onSelectAllColor(items: any) {
        console.log(items);
    }
    onDeSelectAllColor(items: any) {
        console.log(items);
    }

    onItemSelectTechno(item: any) {
        console.log(item);
        console.log(this.selectedItemsTechno);
    }
    OnItemDeSelectTechno(item: any) {
        console.log(item);
        console.log(this.selectedItemsTechno);
    }
    onSelectAllTechno(items: any) {
        console.log(items);
    }
    onDeSelectAllTechno(items: any) {
        console.log(items);
    }

    ngOnInit() {
        this.getTechnologies();
        this.getColors();
        this.getCountries();
    }

    onSubmit() {
        let data: any = this.getData();

        this.websiteService.addWebsite(data);
    }
    protected getData() {
        let postData = [];

        this.project_name = (<HTMLInputElement>document.getElementById('ProjectName')).value;
        this.project_description = (<HTMLInputElement>document.getElementById('ProjectDescription')).value;
        this.keywords = (<HTMLInputElement>document.getElementById('keywords')).value;
        this.image = (<HTMLInputElement>document.getElementById('image1')).value;
        this.screenshot = (<HTMLInputElement>document.getElementById('image2')).value;
        this.second = (<HTMLInputElement>document.getElementById('image3')).value;
        this.website_type = (<HTMLInputElement>document.getElementById('websitetype')).value;
        this.activity_area = (<HTMLInputElement>document.getElementById('activity')).value;
        this.target = (<HTMLInputElement>document.getElementById('target')).value;
        this.project_focus = (<HTMLInputElement>document.getElementById('projectFocus')).value;
        this.project_budget = (<HTMLInputElement>document.getElementById('projectBudget')).value;
        this.languages = (<HTMLInputElement>document.getElementById('languages')).value;
        this.created_by = (<HTMLInputElement>document.getElementById('createdBy')).value;
        this.client_name = (<HTMLInputElement>document.getElementById('client')).value;
        this.release_date = (<HTMLInputElement>document.getElementById('releasedate')).value;
        this.giving_to_agency = (<HTMLInputElement>document.getElementById('agency')).value;
        this.keyFunctionnality = (<HTMLInputElement>document.getElementById('keyFunctionallity')).value;
        this.tech_front = (<HTMLInputElement>document.getElementById('technofront')).value;
        this.dev_languages = (<HTMLInputElement>document.getElementById('devlanguage')).value;
        this.framework = (<HTMLInputElement>document.getElementById('framework')).value;
        this.cms = (<HTMLInputElement>document.getElementById('cms')).value;
        this.technical_challenges = (<HTMLInputElement>document.getElementById('technical')).value;
        this.focal_points = (<HTMLInputElement>document.getElementById('focal')).value;
        this.view_number = (<HTMLInputElement>document.getElementById('view_number')).value;
        this.like_number = (<HTMLInputElement>document.getElementById('like')).value;
        this.average_grade = (<HTMLInputElement>document.getElementById('average_grade')).value;
        this.average_jury_grade = (<HTMLInputElement>document.getElementById('jury_grade')).value;
        this.is_nominated = (<HTMLInputElement>document.getElementById('nominated')).value;
        this.countries = document.getElementById('SelectCountry').getAttribute('ng-reflect-model');

        // techno
        let currentTechno = document.getElementsByClassName('testrecup');
        let technos = [].slice.call(currentTechno); // transform HTML collection in Array
        let technosSelected = [];
        for (let techno of technos) {
            technosSelected.push(techno.textContent);
        }
        console.log(technosSelected);
        this.technologies = technosSelected;

        // color
        let currentColor = document.getElementById('colordrop');
        let colors = [].slice.call(currentTechno); // transform HTML collection in Array
        let colorsSelected = [];
        for (let color of colors) {
            colorsSelected.push(color.textContent);
        }
        console.log(colorsSelected);
        this.colors = colorsSelected;

        postData = postData.concat(
            this.project_name,
            this.project_description,
            this.keywords,
            this.image,
            this.screenshot,
            this.second,
            this.website_type,
            this.activity_area,
            this.target,
            this.project_focus,
            this.project_budget,
            this.languages,
            this.created_by,
            this.client_name,
            this.release_date,
            this.giving_to_agency,
            this.keyFunctionnality,
            this.tech_front,
            this.dev_languages,
            this.framework,
            this.cms,
            this.technical_challenges,
            this.focal_points,
            this.view_number,
            this.like_number,
            this.average_grade,
            this.average_jury_grade,
            this.is_nominated,
            this.technologies,
            this.colors,
            this.countries
        );
    }

    getTechnologies() {
        this.loadDataForSelectService.getTechnology()
            .subscribe(data => {
                let technos = [].slice.call(data);
                for (let techno of technos) {
                    let object = {id: techno.id, itemName: techno.label};
                    this.dropdownListTechno.push(object);
                }
                console.log(this.dropdownListTechno);
            });
    }

    getColors() {
        this.loadDataForSelectService.getColor()
            .subscribe(data => {
                let colors = [].slice.call(data);
                for (let color of colors) {
                    let object = {id: color.id, itemName: color.label };
                    this.dropdownListColor.push(object);
                }
            });
    }

    getCountries() {
        this.loadDataForSelectService.getCountry()
            .subscribe(data => {
                this.countries = data;
            });
    }
}
