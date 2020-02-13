import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class MateriaService {
  //URL da API
  apiUrl: string = "http://localhost:8000/api/";

  //Headers do request
  httpHeaders: object = {
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'Authorization': 'Bearer '
    }
  }

  constructor(public http: HttpClient) { }

  //lista todas as materias
  listSubjects(): Observable<any> {
  	this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('token');

  	return this.http.get( this.apiUrl + 'listsubjects', this.httpHeaders );
  }

  //encontra o nome da materia referente ao id
  findSubject(i:number): Observable<any> {
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('token');

    return this.http.get(this.apiUrl + 'findsubject/' + i, this.httpHeaders)
  }

}
