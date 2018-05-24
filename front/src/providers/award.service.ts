import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {appConfig} from '../app/app.config';
import {Award} from '../app/model/award';

const httpOptions = {
  headers: new HttpHeaders({
    'Content-Type': 'application/json',
  })
};

@Injectable()
export class AwardService {
  awardUrl = appConfig.apiUrl + '/award';

  constructor(private http: HttpClient) {
  }

  /**GET all Agencies*/
  getAwards(): Observable<Award> {
    return this.http.get<Award>(this.awardUrl).map(
      (res) => res as Award
    );
  }

  /** Get the Award from the database  */
  getAward(id: number): Observable<Award> {
    const url = `${this.awardUrl}/${id}`;
    return this.http.get<Award>(url).map(
      (res) => res as Award
    );
  }

  /** Post: add a new agency into the database */
  addAward(award: Award): Observable<Award> {
    return this.http.post<Award>(this.awardUrl, award, httpOptions).map(
      (res) => res as Award
    );
  }

  /** DELETE: delete the award from the database */
  deleteAward(id: number): Observable<{}> {
    const url = `${this.awardUrl}/${id}`;
    return this.http.delete(url, httpOptions).map(
      (res) => res as Award
    );
  }

  /** PUT: update the agency on the server. Returns the updated agency upon success. */
  updateAward(award: Award): Observable<Award> {
    httpOptions.headers =
      httpOptions.headers.set('Authorization', 'my-new-auth-token');

    return this.http.put<Award>(this.awardUrl, award, httpOptions).map(
      (res) => res as Award
    );
  }
}

