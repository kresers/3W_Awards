import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {appConfig} from '../app/app.config';
import {Agency} from '../app/model/agency';

const httpOptions = {
  headers: new HttpHeaders({
    'Content-Type': 'application/json',
  })
};

@Injectable()
export class AgencyService {
  agencyUrl = appConfig.apiUrl + '/agency';

  constructor(private http: HttpClient) {
  }

  /**GET all Agencies*/
  getAgencies(): Observable<Agency> {
    return this.http.get<Agency>(this.agencyUrl).map(
      (res) => res as Agency
    );
  }

  /** Get the Agency from the database  */
  getAgency(id: number): Observable<Agency> {
    const url = `${this.agencyUrl}/${id}`;
    return this.http.get<Agency>(url).map(
      (res) => res as Agency
    );
  }

  /** Post: add a new agency into the database */
  addAgency(agency: Agency): Observable<Agency> {
    return this.http.post<Agency>(this.agencyUrl, agency, httpOptions).map(
      (res) => res as Agency
    );
  }

  /** DELETE: delete the agency from the database */
  deleteAgency(id: number): Observable<{}> {
    const url = `${this.agencyUrl}/${id}`;
    return this.http.delete(url, httpOptions).map(
      (res) => res as Agency
    );
  }

  /** PUT: update the agency on the server. Returns the updated agency upon success. */
  updateAgency(agency: Agency): Observable<Agency> {
    httpOptions.headers =
      httpOptions.headers.set('Authorization', 'my-new-auth-token');

    return this.http.put<Agency>(this.agencyUrl, agency, httpOptions).map(
      (res) => res as Agency
    );
  }
}

