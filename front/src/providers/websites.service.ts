import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {appConfig} from '../app/app.config';
import {Website} from '../app/model/website';
import {Response} from "@angular/http";

const httpOptions = {
  headers: new HttpHeaders({
    'Content-Type': 'application/json',
  })
};

@Injectable()
export class WebsitesService {
  websiteUrl = appConfig.apiUrl + '/websites';

  constructor(private http: HttpClient) {
  }

  /**GET all Website*/
  getWebsites(): Observable<Website> {
    return this.http.get<Website>(this.websiteUrl).map(
      (res) => res as Website
    );
  }

  /** Get the Website from the database  */
  getWebsite(id: number): Observable<Website> {
    const url = `${this.websiteUrl}/${id}`;
    return this.http.get<Website>(url).map(
      (res) => res as Website
    );
  }

  /** Post: add a new website into the database */
  addWebsite(website: Website): Observable<Website> {
    return this.http.post<Website>(this.websiteUrl, website, httpOptions).map(
      (res) => res as Website
    );
  }

  /** DELETE: delete the website from the database */
  deleteWebsite(id: number): Observable<{}> {
    const url = `${this.websiteUrl}/${id}`;
    return this.http.delete(url, httpOptions).map(
      (res) => res as Website
    );
  }

  /** PUT: update the hero on the server. Returns the updated hero upon success. */
  updateWebsite(website: Website): Observable<Website> {
    httpOptions.headers =
      httpOptions.headers.set('Authorization', 'my-new-auth-token');

    return this.http.put<Website>(this.websiteUrl, website, httpOptions).map(
      (res) => res as Website
    );
  }
}

