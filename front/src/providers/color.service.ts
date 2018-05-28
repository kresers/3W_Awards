import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {appConfig} from '../app/app.config';
import {Color} from '../app/model/color';
import {Response} from '@angular/http';

const httpOptions = {
    headers: new HttpHeaders({
        'Content-Type': 'application/json',
    })
};

@Injectable()
export class ColorService {
    colorUrl = appConfig.apiUrl + '/colors';

    constructor(private http: HttpClient) {
    }

    /**GET all Color*/
    getColors(): Observable<Color> {
        return this.http.get<Color>(this.colorUrl).map(
            (res) => res as Color
        );
    }

    /** Get the Color from the database  */
    getColor(id: number): Observable<Color> {
        const url = `${this.colorUrl}/${id}`;
        return this.http.get<Color>(url).map(
            (res) => res as Color
        );
    }

    /** Post: add a new Color into the database */
    addWebsite(color: Color): Observable<Color> {
        return this.http.post<Color>(this.colorUrl, color, httpOptions).map(
            (res) => res as Color
        );
    }

    /** DELETE: delete the Color from the database */
    deleteColor(id: number): Observable<{}> {
        const url = `${this.colorUrl}/${id}`;
        return this.http.delete(url, httpOptions).map(
            (res) => res as Color
        );
    }

    /** PUT: update the Color on the server. Returns the updated Color upon success. */
    updateColor(color: Color): Observable<Color> {
        httpOptions.headers =
            httpOptions.headers.set('Authorization', 'my-new-auth-token');

        return this.http.put<Color>(this.colorUrl, color, httpOptions).map(
            (res) => res as Color
        );
    }
}
