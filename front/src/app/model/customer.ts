import {Website} from './website';
import {Agency} from './agency';
import {Category} from './category';

export class Customer {
    id: number;
    name: string;
    country: string;
    image: string;
    updated_at: string;
    adress: string;
    adress2: string;
    postalCode: number;
    city: string;
    phone_number: number;
    fax: string;
    presentation: string;
    expertise: string;
    notes: string;
    creation_date: string;
    staff_number: number;
    revenue: number;
    website: string;
    agency: Agency;
    project: Website;
    tva_number: number;
    number_duns: number;
    category: Category;
}
