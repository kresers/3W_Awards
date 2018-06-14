import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {appConfig} from '../app/app.config';
import {Response} from '@angular/http';
import {Country} from '../app/model/country';
import {Color} from "../app/model/color";

const httpOptions = {
    headers: new HttpHeaders({
        'Content-Type': 'application/json',
    })
};

@Injectable()
export class CountryService {
    countryUrl = appConfig.apiUrl + '/countries';

    constructor(private http: HttpClient) {
    }

    /**
     *  Get all Country
     * @returns {Observable<Country[]>}
     */
    getCountries(): Observable<Country[]> {
        return this.http.get<Country[]>(this.countryUrl).map(
            (res) => res as Country[]
        );
    }

    /** Get the Country from the database  */
    getCountry(id: number): Observable<Country> {
        const url = `${this.countryUrl}/${id}`;
        return this.http.get<Country>(url).map(
            (res) => res as Country
        );
    }

}
