import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {appConfig} from '../app/app.config';
import {Customer} from '../app/model/customer';

const httpOptions = {
  headers: new HttpHeaders({
    'Content-Type': 'application/json',
  })
};

@Injectable()
export class CustomerService {
  customerUrl = appConfig.apiUrl + '/customer';

  constructor(private http: HttpClient) {
  }

  /**GET all Agencies*/
  getCustomers(): Observable<Customer> {
    return this.http.get<Customer>(this.customerUrl).map(
      (res) => res as Customer
    );
  }

  /** Get the Agency from the database  */
  getCustomer(id: number): Observable<Customer> {
    const url = `${this.customerUrl}/${id}`;
    return this.http.get<Customer>(url).map(
      (res) => res as Customer
    );
  }

  /** Post: add a new agency into the database */
  addCustomer(customer: Customer): Observable<Customer> {
    return this.http.post<Customer>(this.customerUrl, customer, httpOptions).map(
      (res) => res as Customer
    );
  }

  /** DELETE: delete the agency from the database */
  deleteCustomer(id: number): Observable<{}> {
    const url = `${this.customerUrl}/${id}`;
    return this.http.delete(url, httpOptions).map(
      (res) => res as Customer
    );
  }

  /** PUT: update the agency on the server. Returns the updated agency upon success. */
  updateCustomer(customer: Customer): Observable<Customer> {
    httpOptions.headers =
      httpOptions.headers.set('Authorization', 'my-new-auth-token');

    return this.http.put<Customer>(this.customerUrl, customer, httpOptions).map(
      (res) => res as Customer
    );
  }
}

