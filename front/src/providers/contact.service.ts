import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {appConfig} from '../app/app.config';
import {Contact} from '../app/model/contact';

const httpOptions = {
    headers: new HttpHeaders({
        'Content-Type': 'application/json',
    })
};

@Injectable()
export class ContactService {

    constructor(private http: HttpClient) {
    }

    /** Post: add a new contact into the database */
    addContact(contact: Contact) {
        console.log(contact);
        return this.http.post(appConfig.apiContact , contact).map(
            (res) => res as Contact
        );
    }
}
