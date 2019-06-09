import { Injectable } from '@angular/core';
import { Genre } from './genre';
import { HttpClient } from '@angular/common/http';

@Injectable()

export class GenreService {

  constructor(private http: HttpClient) {
/*    this.http.get("/api/genre/").subscribe(
      (vetor: any[]) => {    
        for(let i of vetor){
        this.genres.push(
          new Genre(i.id, i.nome)
        );
        console.log(i);
      }
      }
    )
    */
      }

}
