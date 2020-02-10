import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';
import { Storage } from "@ionic/storage";


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

  constructor( public http: HttpClient ) { }

  //cria novo agendamento (POST)
  createLesson( form ): Observable<any>{
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('token');

    return this.http.post(this.apiUrl + 'createlesson', this.httpHeaders);
  }
  //pega todos os agendamentos (GET)
  listLesson(): Observable<any> {
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('token');

    return this.http.get(this.apiUrl + 'listlesson', this.httpHeaders);
  }

  //deleta o agendamento i (DEL)
  deleteLesson(id:number): Observable<any> {
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('token');
    console.log(this.httpHeaders['headers']);

    return this.http.delete(this.apiUrl + 'deletelesson/' + id, this.httpHeaders);
  }
}
