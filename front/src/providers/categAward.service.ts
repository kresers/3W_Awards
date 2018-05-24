import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {appConfig} from '../app/app.config';
import {CategAward} from '../app/model/CategAward';

const httpOptions = {
  headers: new HttpHeaders({
    'Content-Type': 'application/json',
  })
};

@Injectable()
export class CategAwardService {
  categAwardUrl = appConfig.apiUrl + '/award/category';

  constructor(private http: HttpClient) {
  }

  /**GET all Agencies*/
  getCategAwards(): Observable<CategAward> {
    return this.http.get<CategAward>(this.categAwardUrl).map(
      (res) => res as CategAward
    );
  }

  /** Get the Award from the database  */
  getCategAward(id: number): Observable<CategAward> {
    const url = `${this.categAwardUrl}/${id}`;
    return this.http.get<CategAward>(url).map(
      (res) => res as CategAward
    );
  }

  /** Post: add a new agency into the database */
  addCategAward(categAward: CategAward): Observable<CategAward> {
    return this.http.post<CategAward>(this.categAwardUrl, categAward, httpOptions).map(
      (res) => res as CategAward
    );
  }

  /** DELETE: delete the award from the database */
  deleteCategAward(id: number): Observable<{}> {
    const url = `${this.categAwardUrl}/${id}`;
    return this.http.delete(url, httpOptions).map(
      (res) => res as CategAward
    );
  }

  /** PUT: update the agency on the server. Returns the updated agency upon success. */
  updateCategAward(categAward: CategAward): Observable<CategAward> {
    httpOptions.headers =
      httpOptions.headers.set('Authorization', 'my-new-auth-token');

    return this.http.put<CategAward>(this.categAwardUrl, categAward, httpOptions).map(
      (res) => res as CategAward
    );
  }
}

