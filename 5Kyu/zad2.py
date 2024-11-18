class CaesarCipher(object):

    def __init__(self, shift):
        self.shift = shift

    def encode(self, text):
        result = ""
        for char in text:
            char_code = ord(char)
            if 'a' <= char <= 'z':  
                char_code = ((char_code - ord('a') + self.shift) % 26) + ord('a')
            elif 'A' <= char <= 'Z':  
                char_code = ((char_code - ord('A') + self.shift) % 26) + ord('A')
            result += chr(char_code)
        return result

    def decode(self, text):
        result = ""
        for char in text:
            char_code = ord(char)
            if 'a' <= char <= 'z': 
                char_code = ((char_code - ord('a') - self.shift + 26) % 26) + ord('a')
            elif 'A' <= char <= 'Z': 
                char_code = ((char_code - ord('A') - self.shift + 26) % 26) + ord('A')
            result += chr(char_code)
        return result
