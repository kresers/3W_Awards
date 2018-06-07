import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {Country} from "../app/model/country";
import {appConfig} from "../app/app.config";




@Injectable()
export class LoadDataForSelectService {
    constructor(private http: HttpClient) { }

    getCountry() {
        return this.http.get<Country>(appConfig.apiUrl + '/countries').map(
            (res) => res as Country
        );
    }
}