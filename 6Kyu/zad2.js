function expandedForm(num) {
    let [intPart, fracPart = ""] = num.toString().split(".");
    let terms = [];
  
    for (let i = 0; i < intPart.length; i++) {
      let digit = intPart[i];
      if (digit !== '0') terms.push(digit + '0'.repeat(intPart.length - 1 - i));
    }
  
    for (let i = 0; i < fracPart.length; i++) {
      let digit = fracPart[i];
      if (digit !== '0') terms.push(digit + "/1" + "0".repeat(i + 1));
    }
  
    return terms.join(" + ");
  }
  
  