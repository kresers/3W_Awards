import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import { appConfig} from '../app/app.config';
import {Website} from '../app/model/website';

const httpOptions = {
  headers: new HttpHeaders({
    'Content-Type':  'application/x-www-form-urlencoded',
  })
};

@Injectable()
export class WebsitesService {
  websiteUrl = appConfig.apiUrl + '/websites';
  constructor(private http: HttpClient) {}

  /**GET all Website*/
  getWebsites(): Observable<Website> {
    return this.http.get<Website>(this.websiteUrl);
  }
  getWebsite(id: number): Observable<{}>{
    const url = `${this.websiteUrl}/${id}`;
    return this.http.get(url);
  }
  /** Post: add a new website into the database */
  addWebsite(website: Website): Observable<Website> {
    return this.http.post<Website>(this.websiteUrl, website, httpOptions);
  }
  /** DELETE: delete the hero from the server */
  deleteWebsite(id: number): Observable<{}> {
    const url = `${this.websiteUrl}/${id}`;
    return this.http.delete(url, httpOptions);
  }
  /** PUT: update the hero on the server. Returns the updated hero upon success. */
  updateWebsite(website: Website): Observable<Website> {
    httpOptions.headers =
      httpOptions.headers.set('Authorization', 'my-new-auth-token');

    return this.http.put<Website>(this.websiteUrl, website, httpOptions);
  }
}

