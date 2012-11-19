import csv, json, os

'''
designed for arrays of dictionaries with matching keys, in which each dictionary is one time slice
'''

#remove duplicates. a missing value will assume value of its predecessor
def reduce(series):
    c = len(series)
    while c > 1:
        c -= 1
        for key in series[c].keys():            
            if series[c][key] == series[c-1][key]:
                series[c].pop(key)
    return series

#convert a csv matrix to series format, where values in columns and timestamps in rows
def read(csvfile):
    d = []
    c = 0
    for items in csv.reader(open(csvfile, 'r')):
        if c == 0:
            labels = items
        else:
            o = {}
            for l in range(len(labels)):
                o[labels[l]] = items[l]
            d.append(o)
        c += 1
    return d

def compress(csvpath, destpath):
    f = open(destpath, 'w+')
    f.write(json.dumps(reduce(read(csvpath)), indent=3))
    f.close()
    
dir = os.getcwd()
compress(dir + "/examples/predictions.csv", dir + "/examples/predictions.csvd")