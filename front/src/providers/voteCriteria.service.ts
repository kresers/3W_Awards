import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {appConfig} from '../app/app.config';
import {VoteCriteria} from '../app/model/VoteCriteria';

const httpOptions = {
    headers: new HttpHeaders({
        'Content-Type': 'application/json',
    })
};

@Injectable()
export class VoteCriteriaService {
    voteCriteriaUrl = appConfig.apiUrl + '/votecriteria';

    constructor(private http: HttpClient) {
    }

    /**GET all Agencies*/
    getVoteCriterias(): Observable<VoteCriteria> {
        return this.http.get<VoteCriteria>(this.voteCriteriaUrl).map(
            (res) => res as VoteCriteria
        );
    }

    /** Get the Award from the database  */
    getVoteCriteria(id: number): Observable<VoteCriteria> {
        const url = `${this.voteCriteriaUrl}/${id}`;
        return this.http.get<VoteCriteria>(url).map(
            (res) => res as VoteCriteria
        );
    }

    /** Post: add a new agency into the database */
    addVoteCriteria(voteCriteria: VoteCriteria): Observable<VoteCriteria> {
        return this.http.post<VoteCriteria>(this.voteCriteriaUrl, voteCriteria, httpOptions).map(
            (res) => res as VoteCriteria
        );
    }

    /** DELETE: delete the award from the database */
    deleteVoteCriteria(id: number): Observable<{}> {
        const url = `${this.voteCriteriaUrl}/${id}`;
        return this.http.delete(url, httpOptions).map(
            (res) => res as VoteCriteria
        );
    }

    /** PUT: update the agency on the server. Returns the updated agency upon success. */
    updateVoteCriteria(voteCriteria: VoteCriteria): Observable<VoteCriteria> {
        httpOptions.headers =
            httpOptions.headers.set('Authorization', 'my-new-auth-token');

        return this.http.put<VoteCriteria>(this.voteCriteriaUrl, voteCriteria, httpOptions).map(
            (res) => res as VoteCriteria
        );
    }
}

