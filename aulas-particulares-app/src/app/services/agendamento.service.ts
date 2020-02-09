import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class AgendamentoService {

  //URL da api
  apiUrl:string = 'http://localhost:8000/api/'

  //header do request
  httpHeaders: object = {
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json',
    'Authorization': 'Bearer '
  }
}

  constructor( public http: HttpClient) { }

  //cria novo agendamento (POST)
  createLesson(): Observable<any>{
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('userToken');

    return this.http.post(this.apiUrl + 'createlesson', this.httpHeaders);
  }
  //pega todos os agendamentos (GET)
  listLesson(): Observable<any> {
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('userToken');

    return this.http.get(this.apiUrl + 'listlesson', this.httpHeaders);
  }

  //deleta o agendamento i (DEL)
  deleteLesson(id:number): Observable<any> {
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('userToken');
    console.log(this.httpHeaders['headers']);

    return this.http.delete(this.apiUrl + 'deletelesson/' + id, this.httpHeaders);
  }
}
