PRE = resume

all: $(PRE).pdf $(PRE)1p.pdf $(PRE)-2pages-5papers.pdf

$(PRE).pdf: $(PRE).tex
	touch $(PRE).tex
	pdflatex $(PRE).tex
	cp $(PRE).pdf ../long-cv-michal-valko.pdf

$(PRE)1p.pdf: $(PRE)1p.tex
	touch $(PRE)1p.tex
	pdflatex $(PRE)1p.tex
	cp $(PRE)1p.pdf ../resume-michal-valko.pdf

$(PRE)-2pages-5papers.pdf: $(PRE)-2pages-5papers.tex
	pdflatex $(PRE)-2pages-5papers.tex
	cp $(PRE)-2pages-5papers.pdf ../resume-2pages-5papers-michal-valko.pdf

$(PRE).ps: $(PRE).dvi
	dvips -o $(PRE).ps $(PRE)
	cp $(PRE).ps ../resume-michal-valko.ps

$(PRE).dvi: $(PRE).tex
	latex $(PRE); latex $(PRE)
clean:
	rm -f *.log *.aux *.backup

fresh: clean
	rm -f *.ps *.pdf *.dvi

