function digitalRoot(n) {
    if (n < 10) return n;
  
    sum = 0;
    digits = String(n).split('');
    for (const digit of digits) {
      sum += parseInt(digit);
    }
    return digitalRoot(sum);
  }
  