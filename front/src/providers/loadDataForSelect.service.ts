import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {Country} from '../app/model/country';
import {appConfig} from '../app/app.config';
import {Category} from '../app/model/category';
import {Technology} from '../app/model/technology';
import {Color} from '../app/model/color';

@Injectable()
export class LoadDataForSelectService {
    constructor(private http: HttpClient) { }

    getCountry() {
        return this.http.get<Country>(appConfig.apiUrl + '/countries').map(
            (res) => res as Country
        );
    }

    getCategory() {
        return this.http.get<Category>(appConfig.apiUrl + '/categories').map(
            (res) => res as Category
        );
    }

    getColor() {
        return this.http.get<Color>(appConfig.apiUrl + '/colors').map(
            (res) => res as Color
        );
    }

    getTechnology() {
        return this.http.get<Technology>(appConfig.apiUrl + '/technologies').map(
            (res) => res as Technology
        );
    }
}
