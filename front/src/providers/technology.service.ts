import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {appConfig} from '../app/app.config';
import {Technology} from '../app/model/technology';
import {Response} from '@angular/http';

const httpOptions = {
    headers: new HttpHeaders({
        'Content-Type': 'application/json',
    })
};

@Injectable()
export class TechnologyService {
    technoUrl = appConfig.apiUrl + '/technologies';

    constructor(private http: HttpClient) {
    }

    /**GET all Technology*/
    getTechnologies(): Observable<Technology[]> {
        return this.http.get<Technology[]>(this.technoUrl).map(
            (res) => res as Technology[]
        );
    }

    /** Get the Technology from the database  */
    getTechnology(id: number): Observable<Technology> {
        const url = `${this.technoUrl}/${id}`;
        return this.http.get<Technology>(url).map(
            (res) => res as Technology
        );
    }
}
