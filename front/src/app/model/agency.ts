import {Website} from './website';
import {Category} from './category';

export class Agency {
    id: number;
    name: string;
    country: string;
    image: string;
    category: Category;
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
    project: Website;
    website: string;
    tva_number: number;
    number_duns: number;

}
