text = '''
The Lord is my shepherd, i Shall not want.
He makes me lie in green pastures.
He leads me beside the still waters.
He restores my soul.
He leads me beside the path of righteousness for his name sake.
'''

file = open('psalms.txt', 'w')
file.write(text)
file.close()

file = open('psalms.txt', 'r')
count = 0
while True:
    count += 1
    line = file.readline()
    if len(line) == 0:
        break
    print("{}[{:d}]".format(line, count))
