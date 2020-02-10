import { TestBed, async, inject } from '@angular/core/testing';

import { PerfilGuard } from './perfil.guard';

describe('PerfilGuard', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [PerfilGuard]
    });
  });

  it('should ...', inject([PerfilGuard], (guard: PerfilGuard) => {
    expect(guard).toBeTruthy();
  }));
});
