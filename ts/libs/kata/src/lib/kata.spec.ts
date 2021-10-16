import { getPrice } from './kata';

describe('kata', () => {
  it('should work', () => {
    expect(true).toBe(true);
  });

  it('should not work', () => {
    expect(getPrice([])).toBe(0);
  });
});
