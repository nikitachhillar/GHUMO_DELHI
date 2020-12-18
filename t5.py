import requests
import bs4
from csv import writer

#with open('project.csv'.'w') as csv_file:
    #csv_writer=writer(csv_file)
    #headers=['heading','description','list']
    #csv_writer.writerow(headers)
url="https://www.fabhotels.com/blog/places-to-visit-in-delhi-ncr/"
response=requests.get(url)
soup=bs4.BeautifulSoup(response.text,'html.parser')
div=soup.find(class_='entry-content')
#heading=div.find_all('h3')[0]
heading=div.find_all('h3')
paragraph=div.find_all('p')[2]
ul=div.find_all('ul')
    
for i in heading:
    print(i.text)
for j in paragraph:
    print(j.text)
for k in ul:
    print(k.text)

#print(heading.get_text())
#paragraph=div.find_all('p')[2]
#print(paragraph.get_text())
#ul=div.find_all('ul')[0]
#print(ul.get_text())