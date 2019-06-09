import { Component, OnInit } from '@angular/core';
import { GenreService } from './genre.service';
import { Genre } from './genre';

@Component({
  selector: 'app-genre',
  templateUrl: './genre.component.html',
  styleUrls: ['./genre.component.css']
})
export class GenreComponent implements OnInit {

  private genre: Genre[];

  constructor(public genreService: GenreService) { }

  ngOnInit() {
    this.genre = this.genreService.genres;
  }

}
