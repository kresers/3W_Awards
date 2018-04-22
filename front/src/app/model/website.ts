import {Country} from "./country";
import {Color} from "./color";
import {Technology} from "./technology";
import {Award} from "./award";


export class Website {
  id: number;
  projectName: string;
  projectDescription: string;
  keywords: string;
  websiteType: string;
  activityArea: string;
  target: string;
  projectFocus: string;
  projectBudget: number;
  languages: string;
  createdBy:string;
  releaseDate: any;
  givingToAgency:string;
  keyFunctionnality:string;
  techFront:string;
  devLanguages:string;
  framework:string;
  cms: string;
  technicalChallenges: string;
  focalPoints: string;
  viewNumber:number;
  likeNumber:number;
  averageGrade:string;
  averageJuryGrade:string;
  country: Country;
  color: Color;
  technology: Technology;
  award: Award;
}
