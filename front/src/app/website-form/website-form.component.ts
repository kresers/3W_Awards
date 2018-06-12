import {Component, OnInit} from '@angular/core';
import {Website} from '../model/website';
import {Color} from '../model/color';
import {Technology} from '../model/technology';
import {Award} from '../model/award';
import {Country} from '../model/country';
import {LoaderService} from '../../providers/loader.service';
import {LoadDataForSelectService} from '../../providers/loadDataForSelect.service';
import {IMultiSelectOption, IMultiSelectSettings, IMultiSelectTexts} from 'angular-2-dropdown-multiselect';

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

    colors: any;
    countries: any;
    technologies: any;


    mySettings: IMultiSelectSettings = {
        enableSearch: true,
        checkedStyle: 'fontawesome',
        buttonClasses: 'form-control clickable',
        dynamicTitleMaxItems: 3,
        displayAllSelectedText: true
    };

    myTextsColor: IMultiSelectTexts = {
        checkAll: 'Tous selectionner',
        uncheckAll: 'Tous déselectionner',
        checked: 'selectionnez d\'autres couleurs',
        checkedPlural: 'couleurs selectionnées',
        searchPlaceholder: 'Chercher',
        searchEmptyResult: 'Aucun resultat...',
        searchNoRenderText: 'Type in search box to see resul...',
        defaultTitle: 'Selectionnez une couleur',
        allSelected: 'Toute les couleurs sont selectionnées',
    };

    myTextsTechno: IMultiSelectTexts = {
        checkAll: 'Tous selectionner',
        uncheckAll: 'Tous déselectionner',
        checked: 'selectionnez d\'autres technologies',
        checkedPlural: 'technologies selectionnées',
        searchPlaceholder: 'Chercher',
        searchEmptyResult: 'Aucun resultat...',
        searchNoRenderText: 'Type in search box to see resul...',
        defaultTitle: 'Selectionnez une technologie',
        allSelected: 'Toute les technologies sont selectionnées',
    };

    myOptionsColors: IMultiSelectOption[];
    myOptionsTechnos: IMultiSelectOption[];

    constructor(
        private loaderService: LoaderService,
        private loadDataForSelectService: LoadDataForSelectService
    ) {

    }

    ngOnInit() {
        this.myOptionsTechnos;
        this.myOptionsColors;
        this.getTechnologies();
        this.getColors();
        this.getCountries();
    }

    onSubmit() {
        this.getData();
    }
    protected getData() {
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
        this.colors = (<HTMLInputElement>document.getElementById('')).value;
        this.countries = select.options[select.selectedIndex].text;
        this.technologies = (<HTMLInputElement>document.getElementById('')).value;
    }

    getTechnologies() {
        this.loadDataForSelectService.getTechnology()
            .subscribe(data => {
                this.technologies = data;
                this.myOptionsTechnos = this.technologies;
                console.log(this.myOptionsTechnos);
                });
    }

    getColors() {
        this.loadDataForSelectService.getColor()
            .subscribe(data => {
                this.colors = data;
                this.myOptionsColors = this.colors;
                console.log(this.myOptionsColors);
            });
    }

    getCountries() {
        this.loadDataForSelectService.getCountry()
            .subscribe(data => {
                this.countries = data;
            });
    }
}
