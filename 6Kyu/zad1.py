def expanded_form(n):
    s = str(n)
    terms = []
    for i, digit in enumerate(s):
        if digit != '0':
            place_value = 10**(len(s) - 1 - i)
            terms.append(int(digit) * place_value)
    return ' + '.join(map(str, terms))

print(expanded_form(1202)) 