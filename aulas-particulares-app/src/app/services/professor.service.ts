import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ProfessorService {

  //Url da api
  apiUrl: string = "http://localhost:8000/api/";

  //Headers do programa
  httpHeaders: object = {
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'Authorization': 'Bearer '
    }
  }

  constructor(public http: HttpClient) { }

  //lista todos os professores
  listTeacher(id:number): Observable<any> {
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('token');

    return this.http.get(this.apiUrl + 'findteacherofsubjects/' + id, this.httpHeaders);
  }

  //encontra o nome do professor referente ao id
  findTeacher(i:number): Observable<any> {
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('token');

    return this.http.get(this.apiUrl + 'findteacher/' + i, this.httpHeaders);
  }
  findUserTeacher(j:number): Observable<any> {
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('token');

    return this.http.get(this.apiUrl + 'finduser/' + j, this.httpHeaders);
  }

  //cria um professor novo (POST)
  createTeacher(form):Observable<any> {
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('token');

    return this.http.post(this.apiUrl + 'createteacher', form.value, this.httpHeaders);
  }


}
