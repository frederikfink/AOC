print(
    sum([x[1]-87+(3 if x[0] == -23+x[1]else 6 if (x[0]-64) % 3 == -88+x[1]else 0)
      for x in map(lambda l:list(map(ord, l.strip().split(" "))), open("input.txt").readlines())]))